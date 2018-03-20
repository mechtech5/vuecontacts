<template>
	<div>
		<add :openmodal='addActive' @closeRequest='close'></add>
		<show :openmodal='showActive' @closeRequest='close'></show>

		<nav class="panel column is-offset-2 is-8">
		  <p class="panel-heading">
		    VueContacts
		    <button class="button is-link is-outlined" @click="openAdd">
		      Add New
		    </button>
		  </p>
		  <div class="panel-block">
		    <p class="control has-icons-left">
		      <input class="input is-small" type="text" placeholder="search">
		      <span class="icon is-small is-left">
		        <i class="fa fa-search"></i>
		      </span>
		    </p>
		  </div>
		  <a class="panel-block" v-for="item,key in lists">
		  	<span class="column is-9">
		  		{{ item.name }}
		  	</span>
		    <span class="panel-icon column is-1">
		      <i class="has-text-danger fa fa-trash"></i>
		    </span>
		    <span class="panel-icon column is-1">
		      <i class="has-text-warning fa fa-edit"></i>
		    </span>
		    <span class="panel-icon column is-1" @click="openShow(key)">
		      <i class="has-text-success fa fa-eye"></i>
		    </span>
		  </a>
		</nav>

	</div>
	
</template>

<script>
let add = require('./Add.vue');
let show = require('./Show.vue');
	export default{
		components:{add, show},
		data(){
			return {
				addActive : '',
				showActive : '',
				lists:{},
				errors:{}
			}
		},
		mounted(){
			axios.post('/getData')
				.then((response) => this.lists = response.data)
			  .catch((error) => this.errors = error.response.data.errors)
		},
		methods: {
			openAdd(){
				this.addActive = 'is-active';
			},
			openShow(key){
				this.$children[1].list = this.lists[key];
				this.showActive = 'is-active';
			},
			close(){
				this.addActive = this.showActive = '';
			}
		}
	}
</script>