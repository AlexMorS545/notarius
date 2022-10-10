
export default async function useStore(data) {
    const token = document.querySelector('[name="csrf-token"]').getAttribute('content')

    try {
        const res = await axios.post('/api/records/store',
            {
                _token: token,
                firstname: data.value.firstname,
                lastname: data.value.lastname,
                email: data.value.email,
                recorded_at: data.value.recorded_at,
                type: data.value.type,
            })
        return res
    } catch (e) {
        return e.response
    }
}
