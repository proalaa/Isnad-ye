<template>
  <div class="">
    <order-inputs :form.sync="form" @cancel="cancelForm" @submit="participateInOrder" :is-participated-component="true"/>
  </div>
</template>

<script>
import OrderInputs from "../../components/shared/orderInputs";
import axios from "axios";
import Form from "vform";
import Swal from "sweetalert2";
export default {
  name: "orderParticipate",
  components: {OrderInputs},
  data:()=>({
    form : null
  }),
  methods:{
    cancelForm()
    {
      this.$router.replace('/orders/myorders')
    },
    participateInOrder()
    {
      this.form.patch(`/api/orders/shared/${this.form.id}`).then(response => {
        // if (!response.ok) {
        //   throw new Error(response.statusText)
        // }
        this.$router.replace('/orders/myorders')
        Swal.fire({

          title:'تم المشاركة',
          text:'تمت المشاركة في الطلب بنجاح',
          icon:'success',
          // backdrop: `
          //   rgba(0,0,123,0.4)
          //   // url("/images/fireWork.gif")
          //   // left top
          //   // no-repeat
          // `
        })
      })
        .catch(error => {
          Swal.showValidationMessage(
            `Request failed: ${error}`
          )
        })
    },
  }
  ,
  created() {
    let self = this;
    axios.get(`/api/orders/shared/${this.$route.params.id}`).then(({data}) =>{
      const result = data;
      result.products = [{ name:null , unit:null ,quantity:null , description:null }];
      self.form= new Form(result);
      console.log('fff');
    }).catch(e =>{
      console.log(e.message)
    });
  },

  // watch: {
  //   $route(to, from) {
  //     // react to route changes...
  //     console.log('fff');
  //   }
  // }
  // beforeRouteUpdate(to, from, next){
  //   console.log('ff');
  //   console.log(this.$route.params);
  //   next();
  // }
}
</script>

<style scoped>

</style>
