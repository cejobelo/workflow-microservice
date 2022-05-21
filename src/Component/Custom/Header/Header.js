import { AbstractComponent } from 'hamtaraw';

/**
 * Header front-end.
 *
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class Header extends AbstractComponent {
  /**
   * @inheritDoc
   * @see AbstractPage.getCtrl
   */
  getCtrl() {
    return 'Header';
  }
}