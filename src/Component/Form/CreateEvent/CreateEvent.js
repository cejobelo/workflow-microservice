import {AbstractForm, Modals} from 'hamtaraw';

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
export default class CreateEvent extends AbstractForm {
  /**
   * @inheritDoc
   * @see AbstractModal.getCtrl
   */
  getCtrl() {
    return 'CreateEvent';
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