<template>
  <Card style="padding-bottom: 0px">
    <div class="row align-items-baseline">
      <ul class="d-flex" v-if="classes">
        <li class="list-unstyled" @click="updateItems(item)" v-for="(item , index) in classes" :key="index" :class="{active: item.active}">
          {{item.title}}
<!--          <span>{{item.count}}</span>-->
        </li>
      </ul>
      <div class="col">
      <isnad-search/>
      </div>
    </div>
    <div>
      <slot>

      </slot>
    </div>
    <!--    TODO use https://github.com/AlbertLucianto/vuex-search/blob/master/README.md for search-->
  </Card>
</template>
<script>
import Card from '../Card';
import IsnadSearch from "./IsnadSearch";
export default {
  name: 'ClassificationBar',
  components:{
    IsnadSearch,
    Card
  },
  data:() =>({
  }),
  props: {
    classes:{
      type:Array, required:false
    }
  },
  methods:{
    updateItems(current_item)
    {
      this.classes.forEach(function (item){
        item.active = false;
        if(item == current_item)
          item.active = true;
      })
      this.$emit('updateview' , item )
    }
  },
  mounted() {
  }
}
</script>

<style scoped>
  ul{
    margin-top: 21px;
  }
  li{
    position: relative;
    margin-inline-end: 40px;
    padding-bottom: 15px;
    cursor: pointer;
    text-align: center;
  }
  span{
    position: absolute;
    font-size: 13px;
    top: -27px;
    left: -22px;
    border-radius: 50%;
    padding: 2px;
    background: #EAEDED;
    width: 25px;
    height: 25px;
    text-align: center;
  }
  li.active{
    border-bottom: 3px solid #0f6674;
  }
</style>
