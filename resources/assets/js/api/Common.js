const axios = require('axios');

export class Common {
    static get_shop_info() {
        // Make a request for get  shop information....
       return axios.get('/shop');
    }
    // get categories list
    static get_categories(){
        return axios.get('/categories');
    }

    // get menus
    static get_menus(){
        return axios.get('/menu');
    }
}