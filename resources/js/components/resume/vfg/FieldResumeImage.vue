<template>
  <div class="d-sm-inline-flex w-100">
    <div>
      <img :src="image" />
    </div>
    <div class="align-self-center p1-sm-3 pt-3 pt-sm-0">
      <input type="file" @change="onImageChange($event)" />
    </div>
  </div>
</template>

<script>
import {abstractField} from "vue-form-generator";
export default {
  name: "FielResumeImage",

  //exportando este componente para reutilzarlo
  mixins: [abstractField],

  data() {
    return {
      reader: new FileReader(),
      image:
        "https://raw.githubusercontent.com/antoniosarosi/jsonresume-manager/master/storage/app/public/images/default.png",
    };
  },

  created() {
    this.reader.onload = (e) => {
      const blob = e.target.result;
      this.image = blob;
      console.log(this.model);
      console.log(this.schema);

      this.model[this.schema.model] = blob;
    };
  },

  methods: {
    onImageChange(e) {
      //captura la imagen subida
      console.log(e.target.files[0]);
      //ejecutar reader de created
      this.reader.readAsDataURL(e.target.files[0]);
    },
  },
};
</script>

<style scoped>
img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
</style>
