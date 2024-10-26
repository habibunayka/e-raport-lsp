const data = [
    { no: 1, nis: '001', nama: 'Budi', matematika: 80, b_indonesia: 85, b_inggris: 90, kejuruan: 80 },
    { no: 2, nis: '002', nama: 'Siti', matematika: 90, b_indonesia: 88, b_inggris: 86, kejuruan: 88 },
    { no: 3, nis: '003', nama: 'Joko', matematika: 75, b_indonesia: 78, b_inggris: 74, kejuruan: 85 },
    { no: 4, nis: '004', nama: 'Dewi', matematika: 85, b_indonesia: 80, b_inggris: 82, kejuruan: 81 },
    { no: 5, nis: '005', nama: 'Andi', matematika: 95, b_indonesia: 92, b_inggris: 89, kejuruan: 94 },
];

// Kalau udah ada datanya bisa pakai ini bu.
// let data = @json($students);

let currentPage = 1;
const rowsPerPage = 10;

function calculateAverage(item) {
    const totalScore = item.matematika + item.b_indonesia + item.b_inggris + item.kejuruan;
    return (totalScore / 4).toFixed(2);
}

function displayData() {
    const tableBody = document.getElementById('data-table');
    tableBody.innerHTML = '';

    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const filteredData = data.slice(startIndex, endIndex);

    filteredData.forEach(item => {
        item.rata_rata = calculateAverage(item);
        const row = `<tr>
            <td>${item.no}</td>
            <td>${item.nis}</td>
            <td>${item.nama}</td>
            <td>${item.matematika}</td>
            <td>${item.b_indonesia}</td>
            <td>${item.b_inggris}</td>
            <td>${item.kejuruan}</td>
            <td>${item.rata_rata}</td>
            <td><a href="/teacher/edit" class="edit">Edit</a> <a class="delete">Delete</a></td>
        </tr>`;
        tableBody.innerHTML += row;
    });

    document.getElementById('page-number').innerText = currentPage;
}

function changePage(direction) {
    const totalPages = Math.ceil(data.length / rowsPerPage);
    currentPage += direction;

    if (currentPage < 1) currentPage = 1;
    if (currentPage > totalPages) currentPage = totalPages;

    displayData();
}

document.getElementById('search').addEventListener('input', function() {
    const searchValue = this.value.toLowerCase();
    const filteredData = data.filter(item => item.nama.toLowerCase().includes(searchValue));
    const tableBody = document.getElementById('data-table');
    tableBody.innerHTML = '';

    filteredData.forEach(item => {
        item.rata_rata = calculateAverage(item);
        const row = `<tr>
            <td>${item.no}</td>
            <td>${item.nis}</td>
            <td>${item.nama}</td>
            <td>${item.matematika}</td>
            <td>${item.b_indonesia}</td>
            <td>${item.b_inggris}</td>
            <td>${item.kejuruan}</td>
            <td>${item.rata_rata}</td>
            <td><a href="/teacher/edit" class="edit">Edit</a> <a class="delete">Delete</a></td>
        </tr>`;
        tableBody.innerHTML += row;
    });

    if (filteredData.length === 0) {
        tableBody.innerHTML = '<tr><td colspan="9">No data found</td></tr>';
    }
});

displayData();
