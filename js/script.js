Vue.config.devtools = true;

const app = new Vue ({
    el: '#root',
    data : {
        discs:[

        ]
    },
    mounted(){
        axios.get('../php/api.php').then((res)=>{this.discs = res.data})
    }
});


