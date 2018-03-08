import VueRouter from 'vue-router';

let routes = [
{
	path: '/',
	component: require('./components/ExampleComponent.vue')
},
{
	path:'/about',
	component:require('./components/About')
},
{
	path:'/garages',
	component:require('./components/Garages')
}


];

export default new VueRouter({

	routes
});