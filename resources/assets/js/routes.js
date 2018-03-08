import VueRouter from 'vue-router';

const routes = [
	{
		path:'/home',
		component:require('./components/ExampleComponent')
	},
	{
		path:'/about',
		component:require('./components/About')
	}
	
];

export default new VueRouter({

	routes


});
