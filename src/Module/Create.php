<?php
namespace Hamtaraw\Ms\Workflow\Module;

use Exception;
use Hamtaraw\Module\AbstractModule;

/**
 * The creation class.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class Create extends AbstractModule
{
    /**
     * Create a controller.
     *
     * @param string $sCtrl
     * @param string $sSrcFolder
     * @param string|array $mTemplates
     * @return void
     * @throws Exception
     */
    public function controller(string $sCtrl, string $sSrcFolder, $mTemplates)
    {
        preg_match('`/?([a-zA-Z]+)$`', $sCtrl, $aMatches);
        $sClassName = $aMatches[1] ?? '';
        
        $sBasepath = $this->Microservice->getBasepath();
        $sVendorDir = "$sBasepath/vendor";
        $sFolderTarget = "$sBasepath/src/$sSrcFolder/";
        $sFolderTarget .= is_array($mTemplates) ? $sCtrl : '';

        # Create the page folder
        if (!is_dir($sFolderTarget))
        {
            mkdir($sFolderTarget, 0777, true);
        }

        $aConfig = include realpath("$sBasepath/src/main.php");
        $sWorkflowDir = "{$this->Microservice->getSrc()}/Workflow";

        if (is_array($mTemplates))
        {
            foreach ($mTemplates as $sTemplate)
            {
                preg_match('`^(?:.*[.|/])?([a-zA-Z]+)\..+$`', $sTemplate, $aMatches);
                $sExtension = $aMatches[1] ?? '';
                $sWorkflowFile = is_file($sWorkflowDir) ? "$sWorkflowDir/$sTemplate" : '';

                if (!$sWorkflowFile || !is_file($sWorkflowFile))
                {
                    throw new Exception("Worflow template doesn't exist : $sTemplate");
                }

                $sContent = file_get_contents($sWorkflowFile);
                $sContent = str_replace('{{AUTHOR}}', $aConfig['author'], $sContent);
                $sContent = str_replace('{{EMAIL}}', $aConfig['email'], $sContent);
                $sContent = str_replace('{{NAME}}', $sClassName, $sContent);
                $sContent = str_replace('{{CTRL}}', $sCtrl, $sContent);
                file_put_contents("$sFolderTarget/$sClassName.$sExtension", $sContent);
            }
        }

        else if (is_string($mTemplates))
        {
            preg_match('`^(?:.*[.|/])?([a-zA-Z]+)\..+$`', $mTemplates, $aMatches);
            $sExtension = $aMatches[1] ?? '';
            $sWorkflowFile = is_file($sWorkflowDir) ? "$sWorkflowDir/$mTemplates" : '';

            if (!$sWorkflowFile || !is_file($sWorkflowFile))
            {
                throw new Exception("Worflow template doesn't exist : $mTemplates");
            }

            $sContent = file_get_contents($sWorkflowFile);
            $sContent = str_replace('{{AUTHOR}}', $aConfig['author'], $sContent);
            $sContent = str_replace('{{EMAIL}}', $aConfig['email'], $sContent);
            $sContent = str_replace('{{NAME}}', $sClassName, $sContent);
            $sContent = str_replace('{{CTRL}}', $sCtrl, $sContent);
            file_put_contents("$sFolderTarget/$sClassName.$sExtension", $sContent);
        }

        else
        {
            throw new Exception("Invalid worflow templates");
        }
    }
}