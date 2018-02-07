<template>
	
	<div>
		<table class="table is-striped">
			<thead>
				<tr>
					<th v-for="column in columns" class="is-uppercase">
						<span @click="toggleOrder(column)">{{ column }}</span>
						<abbr v-if="column === query.column">
							<span v-if="query.direction === 'asc'">&uarr;</span>
							<span v-else>&darr;</span>
						</abbr>
					</th>
				</tr>
			</thead>

			<tbody>
				<tr v-for="row in model.data">
					<td>{{ row.id }}</td>
					<td>{{ row.member_name }}</td>
					<td>{{ row.family.family_name }}</td>
				</tr>
			</tbody>
		</table>
	</div>

</template>

<script>
	import Vue from 'vue'
	import axios from 'axios'

	export default{
		props: ['source', 'title'],
		data() {
			return  {
				model : {},
				columns : {},
			
				query : {
					column : 'family.family_name',
					direction : 'asc',
					page : 1
				}
			}
			
		}, 
		created(){
			this.fetchIndexData()
		},
		methods : {

			toggleOrder(column){
				if(column === this.query.column){
					// change direction 
					if(this.query.direction === 'desc'){
						this.query.direction = 'asc'
					}else{
						this.query.direction = 'desc'
					}
				}else{
					this.query.column = column
					this.query.direction = 'asc'
				}

				this.fetchIndexData();

			},
			
			fetchIndexData(response){
				var vm = this

				axios.get(this.source +'?column='+ this.query.column +'&direction='+ this.query.direction +'&page='+ this.query.page).then(function(response){
					Vue.set(vm.$data, 'model', response.data.model)
					Vue.set(vm.$data, 'columns', response.data.columns)
				}).catch(function(response){
					console.log(response)
				})

		

				// axios.get(this.source)
				// .then(response=>{
				// 	var modelVue = this.model = response.data
				// 	var columnVue = this.columns = response.data)
				// }).catch(response=>{
				// 	console.log(response)
				// })
				// 
				// this code above only load the raw data on browser
				// it didn't load the VUE table
			}
		}
	}
</script>