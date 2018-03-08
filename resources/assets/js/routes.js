import VueRouter from 'vue-router';

let routes = [
{
	path: '/',
	component: require('./components/ExampleComponent.vue')
},
{
	path:'/about',
	component:require('./components/About')
}


];

export default new VueRouter({

	routes
});