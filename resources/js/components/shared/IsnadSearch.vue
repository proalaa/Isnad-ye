<template>
  <div class="w-100">
    <form action="">
      <div  class="rounded-pill border d-flex px-1 align-items-center search-box">
      <input type="search" class=" border-0">
       <button><fa icon="search"/></button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "IsnadSearch",

}
</script>

<style scoped lang="scss">
div.search-box
{
  button{
    background: #25a2b8;
    color: white;
    border-radius: 50px;
    width: 32px;
    text-align: center;
    line-height: 17px;
    margin: 5px 10px 5px 2px;
    height: 30px;
    font-size: 15px;
    border: 0;

    fa
    {
      color: #0f6674;
    }
  }
  &:focus{
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.25);
  }
  input{
    background: none;
    flex: 1;
    &:focus-visible{
      border: none;
      outline: none;
    }

}

}
</style>
