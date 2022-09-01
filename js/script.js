Vue.config.devtools = true;

const app = new Vue ({
    el: '#root',
    data : {
        discs:[

        ]
    },
    mounted(){
        axios.get('http://localhost/api/php-ajax-dischi/php/').then((res)=>{this.discs = res.data})
    }
});