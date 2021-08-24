<template>
  <div class="" v-if="form">
    <order-inputs  :form.sync="form" @cancel="cancelForm" :is-participated-component="false" @submit="updateOrder" :is-edit-component="true"/>
  </div>
</template>

  <script>
    import Card from "../../components/Card";
    import axios from "axios";
    import OrderInputs from "../../components/shared/orderInputs";
    import Form from "vform";
    import moment from "moment";
    import Swal from "sweetalert2";
    import {serialize} from "object-to-formdata";
    export default {
      name: "editOrder",
      components:{
        OrderInputs
      },
      middleware: ['auth', 'entity'],
      data:() =>({
        form: null
      })

      ,
      methods:{
        updateOrder(){

          this.form.submit('post',`/api/orders/${this.form.id}/update`,{
            transformRequest: [function (data, headers) {
              return serialize(data , {
                indices:true,
                booleansAsIntegers:true
              });
            }]
          }).then(response => {
            // if (!response.ok) {
            //   throw new Error(response.statusText)
            // }
            this.$router.replace('/orders/myorders')
              Swal.fire({

                  title:'تم التعديل',
                  text:'تم تعديل الطلب بنجاح',
                  icon:'success',
                  // backdrop: `
                  //   rgba(0,0,123,0.4)
                  //   url("/images/fireWork.gif")
                  //   left top
                  //   no-repeat
                  // `
              })
          })
            .catch(error => {
              Swal.showValidationMessage(
                `Request failed: ${error}`
              )
            })
        },
        diffTime(d1 , d2){
          return  moment(d1).diff(moment(d2), 'days');
        },
        cancelForm()
        {
          this.$router.replace('/orders/myorders')
        }
      },

      metaInfo () {
        return { title: this.$t('orders') }
      },
      created() {

          let self = this;
          axios.get(`/api/orders/${this.$route.params.id}?simple`).then(({data} ) =>{
          self.form= new Form(data);
          // this.form.post_duration =this.diffTime(this.form.share_end_at , this.form.created_at);
          // this.form.open_duration  =this.diffTime(this.form.open_until , this.form.shareable_until);
          // this.form.vote_duration =this.diffTime(this.form.votable_until , this.form.open_until);
        }).catch(e =>{
          console.log(e.message)
          });


      },
    }
  </script>

  <style scoped lang="scss">

  </style>


