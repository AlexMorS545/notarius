
export default async function useRecords() {
    const res = await axios.get('/api/records').then(res => res.data)

    return res.data
}
