import { AbstractModal } from 'hamtaraw';

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class CreateComponent extends AbstractModal {
  /**
   * @inheritDoc
   * @see AbstractModal.getCtrl
   */
  getCtrl() {
    return 'CreateComponent';
  }

  /**
   * @inheritDoc
   * @see AbstractModal.show
   */
  show(event) {
    console.log('CreateComponent is showing');
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
    console.log('CreateComponent is hidding');
  }

  /**
   * @inheritDoc
   * @see AbstractModal.hidden
   */
  hidden(event) {
    console.log('CreateComponent is hidden');
  }
}