import VueRouter from 'vue-router';

let routes = [
	{
		path:'/home',
		component:require('./components/ExampleComponent.vue')
	},
	{
		path:'/about',
		component:require('./components/About.vue')
	}
	
];

export default new VueRouter({

	routes


});
