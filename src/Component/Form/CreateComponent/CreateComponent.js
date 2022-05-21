import {AbstractForm, Modals} from 'hamtaraw';

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class CreateComponent extends AbstractForm {
  /**
   * @inheritDoc
   * @see AbstractModal.getCtrl
   */
  getCtrl() {
    return 'CreateComponent';
  }

  /**
   * @inheritDoc
   * @see AbstractModal.success
   */
  success(Response) {
    Modals.closeCurrent();
  }

  /**
   * @inheritDoc
   * @see AbstractModal.error
   */
  error(Response) {
    console.error(Response);
  }
}