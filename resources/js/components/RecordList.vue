<template>
    <h3 class="heading__3">Ваши записи</h3>
    <div class="cards">
        <div
            class="cards__item"
            v-for="record of recordsUser.records"
            :key="record.id"
        >
            <p>{{ recordsUser.firstname }}</p>
            <p>{{ recordsUser.email }}</p>
            <p>{{ record.recorded_at }}</p>
            <p>{{ options[record.type] }}</p>
            <p></p>
        </div>
    </div>
</template>

<script>
export default {
    name: "RecordList",
    props: {
        record: Object
    },
    setup({record}) {
        const recordsUser = record.users[0] ?? {}

        const options = {
            trust: 'доверенность',
            heritage: 'наследство',
            reference: 'справка'
        }

        return {recordsUser, options}
    }
}
</script>

<style scoped>

</style>
