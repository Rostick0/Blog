// import Vue from './vue';

export default {
    data() {
        return {
            sayHi: 'hello'
        }
    }
}

const test = new Vue({
    el: '#test',
    data: {
        msg: 'this.sayHi'
    }
})
