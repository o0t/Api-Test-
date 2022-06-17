// http://dummy.restapiexample.com/api/v1/employees
const api = "http://dummy.restapiexample.com/api/v1/employees";
// https://www.breakingbadapi.com/api/

async function get() {

    const response = await fetch(api)

    const data = await response.json()

    console.log(data);

    // document.getElementById('Test').innerHTML = data[0].name;
}

get()