<template>
    <div class="card">
        <div class="card-header">
            <router-link to="/create" class="btn btn-primary float-right">Create Post</router-link>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="25%">Title</th>
                    <th>Description</th>
                    <th width="100"></th>
                    <th width="100"></th>
                    <th width="100"></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="post, index in posts">
                    <td>{{ post.title }}</td>
                    <td>{{ post.description }}</td>
                    <td>
                      <router-link :to="{name: 'readPost', params:{id:post.id}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</router-link>
                    </td>
                    <td>
                      <router-link :to="{name: 'editPost', params:{id:post.id}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</router-link>
                    </td>
                    <td><button class="btn btn-danger btn-sm" v-on:click="submitPostDelete(post.id, index)"><i class="fa fa-trash"></i> Delete</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      posts: [],
      errors: []
    }
  },

  created() {
    axios.get('/posts')
    .then(response => {
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
  },

  methods:{
      submitPostDelete(id, index) {

        if(confirm("Click 'Ok' to delete.")) {
      
          axios.delete('/posts/' + id)
          .then(response => {
              console.log(response)
              this.posts.splice(index, 1)
          })
          .catch(e => {
              this.errors.push(e)
          })    
        }
      }
    }
}
</script>