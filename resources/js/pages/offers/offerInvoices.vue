<template>
  <div>
    <div class="text-center" v-for="(invoice , key) in invoices">
      <embed :src="invoice" style="width: 70vw;height: 80vh"/>
    </div>
    <hr>
  </div>
</template>
<script>
import axios from "axios";

export default {
  name: "offerInvoices",
  data:()=>({
    invoices:[]
  }),
  methods:{
    async getinvoice(){
      const {data} = await axios.get(`/api/offers/${this.$route.params.id}/invoices`);
      console.log(data);
      this.invoices = data.map((x) => x.toString());
    }
  },
  created() {
    this.getinvoice();
  }
}
</script>

<style scoped>

</style>
