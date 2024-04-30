
const axiosInstance = axios.create({
  baseURL: 'https://fakestoreapi.com/',
  timeout: 20000,
  headers: {
    "Content-Type": "application/json",
    "X-Requested-With": "XMLHttpRequest"
  }
})