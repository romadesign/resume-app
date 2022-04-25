<template>
  <div class="card mt-3 mb-3">
    <div class="card-header">{{ title }}</div>

    <div class="card-body">
      <div v-for="(input, i) in target[prop]" :key="i" class="d-flex p-0">
        <div class="col-10">
          <input
            :placeholder="placeholder"
            class="form-control"
            type="text"
            v-model="target[prop][i]"
          />
        </div>
        <div class="col-2 d-flex ms-2">
          <button class="btn btn-danger ms-2" @click="remove(i)">
            Delete
          </button>
        </div>
      </div>
      <div>
        <button class="btn btn-primary" @click="add()">add</button>
      </div>
    </div>
  </div>
</template>

<script>
/**
 * Display a list of inputs.
 */
import mixin from './mixin';
export default {
  name: 'ListForm',
  mixins: [mixin],
  props: {
    placeholder: {
      type: String,
			default: () => '',
    },
  },
  data() {
    return {
      push: () => '',
    };
  },
};
</script>