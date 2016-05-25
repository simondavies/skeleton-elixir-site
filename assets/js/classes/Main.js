/**
 * The Main Class
 * @author Simon Davies
 */
import Cookies from './Cookies';

export default class Main {
    constructor() {
        /**
         * init the cookies pop up system
         */
        new Cookies;
    }
    /**
     * Homepage method
     */
    Homepage(){
        console.log('homepage called');
    }
}
