<template>
    <div class="content">
        <div class="heading__wrap">
            <h1 class="heading__1">Записаться на прием</h1>
        </div>
        <div class="content__items-wrap">
            <div class="content__items-wrap-item">
                <Form/>
            </div>
            <div class="content__items-wrap-item">
                <RecordList
                    v-if="records.length > 0"
                    v-for="record of records"
                    :key="record.id"
                    :record="record"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Form from "@/components/Form.vue";
import RecordList from "@/components/RecordList.vue";
import useRecords from "@/hooks/records";

export default {
    name: "Home",
    components: { Form, RecordList },

    async setup() {
        const records = await useRecords()

        return {records}
    }
}
</script>
