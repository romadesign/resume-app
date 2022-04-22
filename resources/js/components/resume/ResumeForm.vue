<template>
	<div>
		<Tabs>
			<Tab title="Basics" icon="fa fa-user">
				 <VueFormGenerator
          :schema="schemas.basics"
          :model="resume.content.basics"
					:options="options"
        />
				 <VueFormGenerator
          :schema="schemas.location"
          :model="resume.content.basics.location"
          :options="options"
          class="mt-3"
        />
				<VueFormGenerator
          :schema="schemas.profile"
          :model="resume.content.basics.profile"
          :options="options"
          class="mt-3"
        />
			</Tab>
		</Tabs>
	</div>
</template>
<script>


import Tabs from './tabs/Tabs';
import Tab from './tabs/Tab';

//import schemas
import basics from './schema/basics/basics';
import location from './schema/basics/location';
import profile from './schema/basics/profile';


//import form vueGeneratorForm
import { component as VueFormGenerator } from 'vue-form-generator';
//import validate vueGeneratorForm
import 'vue-form-generator/dist/vfg.css';

export default {
	name: 'ResumeForm',

	components: {
		Tabs,
		Tab,
		VueFormGenerator,
	},

	data() {
		return {
			//info que va a enviar a la base de datos
			resume: {
				title: '',
				content: {
					basics: {
						location: {
						},
						profile: {
						}
					}
				}
			},
			//utilizando los datos del json basics  y que estara en resume.basic de arriba
			schemas: {
				basics,
				location,
				profile,
			},

			//options para validar inputs que se encuentran en la documentacion
			options: {
				validateAfterLoad: true,
				validateAfterChanged: true,
				validateAsync: true,
    },
		}
	}
}
</script>




