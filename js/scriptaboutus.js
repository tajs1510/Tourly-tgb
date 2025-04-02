document.addEventListener("DOMContentLoaded", function() {
    // Lấy danh sách các box
    const boxes = document.querySelectorAll(".box");

    // Lấy phần tử chứa thông tin chi tiết
    const detailsContainer = document.querySelector(".details-container");

    // Xử lý sự kiện khi click vào mỗi box
    boxes.forEach(function(box) {
        box.addEventListener("click", function() {
            // Ẩn tất cả các box và hiển thị chi tiết của box được click
            boxes.forEach(function(b) {
                b.style.transform = "translateY(0)";
            });
            
            // Lấy thông tin chi tiết của box được click
            const details = `
                <h2>${box.querySelector("h3").innerText}</h2>
                <p>${box.querySelector("h5").innerText}</p>
                <!-- Thêm thông tin chi tiết khác nếu cần -->
            `;

            // Hiển thị thông tin chi tiết
            detailsContainer.innerHTML = details;
        });
    });
}); // Ngoặc đóng của sự kiện DOMContentLoaded
