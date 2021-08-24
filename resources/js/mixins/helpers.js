import Swal from "sweetalert2";
export default {
    methods:{
      getimage(path){
        return '/storage/' + path
      },
      checkString(item)
      {
        return Object.prototype.toString.call(item).slice(8, -1) == 'String'
      },
      imagePreview(path)
      {
        console.log(path);
        if(!path)
          return false;

        console.log('fffe');
        Swal.fire({
          imageUrl: path,
          imageHeight: 300,
          imageAlt: 'imagePreview'
        })
      }
    }
}

