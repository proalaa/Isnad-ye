<template>
  <div class="text-center">
    <embed :src="invoice" style="width: 70vw;height: 80vh"/>
  </div>
</template>

<script>
import pdf from 'vue-pdf'
import axios from "axios";

export default {
  name: "orderInvoice",
  components:{
    pdf
  },
  data:()=>({
    invoice:''
  }),
  methods:{
    async getinvoice(){
      const {data} = await axios.get(`/api/orders/${this.$route.params.id}/invoice`);
      this.invoice = data.toString();
    }
  },
  created() {
    this.getinvoice();
  }
}
</script>

<style scoped>

</style>
