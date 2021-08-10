<template>
  <order-inputs @cancel="cancelForm" :form.sync='this.form' :isParticipatedComponent="false" @submit="createOrder"/>
</template>

<script>
import Card from "../../components/Card";
import OrderInputs from "../../components/shared/orderInputs";
import Form from 'vform';
export default {
  name: "NewOrder",
  components:{
    OrderInputs

  },
  middleware: ['auth', 'entity'],

  data:()=>({
    form: new Form({
      products:[{name:null , unit:null , quantity: null , description:null}], is_shareable:0 ,post_duration:null ,open_duration:null, vote_duration:null
    }),

  }),
  metaInfo () {
    return { title: this.$t('orders') }
  },
  methods:{
    createOrder(save_as_draft)
    {
      if(!this.form.is_shareable)
      {
        this.form.post_duration = this.form.vote_duration = null;
      }

      this.form.post(`/api/orders/create?save_as_draft=${save_as_draft || 0}`).then(async  ({data}) =>{
        this.$router.push('/orders');
      }).catch(e =>{
        console.log(e.message);
      });
      return false;
    },
    cancelForm()
    {
      this.$router.replace('/orders/myorders');
    }
  },

}
</script>

<style scoped lang="scss">

</style>
