<template>
	<div>
		<Tabs>
			<Tab title="Basics" icon="fa fa-user">
				<h1>Test 1</h1>
			</Tab>
		</Tabs>
	</div>
</template>
<script>
import Tabs from './tabs/Tabs'
import Tab from './tabs/Tab'
export default {
	name: 'ResumeForm',

	components: {
		Tabs,
		Tab
	},

	data() {
		return {
			resume: {
				title: '',
				content: {
					basics: {}
				}
			}
		}
	}
}
</script>




