import { AbstractModal } from 'hamtaraw';

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class CreateModal extends AbstractModal {
  /**
   * @inheritDoc
   * @see AbstractModal.getCtrl
   */
  getCtrl() {
    return 'CreateModal';
  }

  /**
   * @inheritDoc
   * @see AbstractModal.show
   */
  show(event) {
    console.log('CreateModal is showing');
  }

  /**
   * @inheritDoc
   * @see AbstractModal.shown
   */
  shown(event) {
    this.jQuery().find('input').focus();
  }

  /**
   * @inheritDoc
   * @see AbstractModal.hide
   */
  hide(event) {
    console.log('CreateModal is hidding');
  }

  /**
   * @inheritDoc
   * @see AbstractModal.hidden
   */
  hidden(event) {
    console.log('CreateModal is hidden');
  }
}