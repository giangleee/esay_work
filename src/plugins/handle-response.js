export default (context, inject) => {
  const handleResponse = (response) => {
    if (response.status === 200) {
      return {
        message: response,
        errors: [],
      }
    } else {
      return {
        message: response.response.data.message,
        errors: response.response.data.errors,
      }
    }
  }

  inject('handleResponse', handleResponse)
  context.$handleResponse = handleResponse
}
