<template>
    <h3 class="heading__3">Заполните форму</h3>
    <form @submit.prevent="submit">
        <div class="field_wrap">
            <input
                type="text"
                name="firstname"
                v-model="form.firstname"
                placeholder="Имя"
            >
            <p class="field_wrap__alert-input"></p>
        </div>
        <div class="field_wrap">
            <input
                type="text"
                name="lastname"
                v-model="form.lastname"
                placeholder="Фамилия"
            >
            <p class="field_wrap__alert-input"></p>
        </div>
        <div class="field_wrap">
            <input
                type="email"
                name="email"
                v-model="form.email"
                placeholder="E-mail"
            >
            <p class="field_wrap__alert-input"></p>
        </div>
        <div class="field_wrap">
            <Datepicker
                v-model="form.recorded_at"
                locale="ru"
                :format-locale="ru"
                format="d.m.Y H:m"
                placeholder="Дата записи"
            />
            <p class="field_wrap__alert-input"></p>
        </div>
        <div class="field_wrap">
            <select id="type" name="type" v-model="form.type">
                <option
                    v-for="type in options"
                    :key="type.name"
                    :value="type.name"
                >
                    {{ type.value }}
                </option>
            </select>
            <p class="field_wrap__alert-input"></p>
        </div>
        <div class="field_wrap">
            <button type="submit">Записаться</button>
        </div>
    </form>
</template>

<script>
import { ref } from 'vue'
import useStore from "@/hooks/store";
import Datepicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';

export default {
    name: "Form",
    components: { Datepicker },

    setup() {
        let result = null
        const form = ref({
            firstname: '',
            lastname: '',
            email: '',
            recorded_at: '',
            type: ''
        })

        const options = [
            {name: '', value: 'Тип обращения'},
            {name: 'trust', value: 'доверенность'},
            {name: 'heritage', value: 'наследство'},
            {name: 'reference', value: 'справка'}
        ]


        const submit = () => {
            const data = useStore(form)
            console.log('data', data)
        }

        return { form, options, result, submit }
    }
}
</script>

<style scoped>

</style>
