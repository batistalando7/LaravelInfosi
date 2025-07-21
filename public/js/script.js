document.addEventListener('DOMContentLoaded', function () {
    const addButton = document.getElementById('button-addon2');
    const itemQtyInput = document.querySelector('#item_qty');
    const formCheckContainer = document.querySelector('.form-check');
    var a = 0;
    addButton.addEventListener('click', function () {
        if ((addButton && a === 0)) {
            window.alert('Button clicked');
            a++;
            const itemQty = itemQtyInput.value;
            if (itemQty) {
                window.alert('a =' + a)
                for (let i = 0; i < itemQty; i++) {
                    const newCheck = formCheckContainer.cloneNode(true);
                    newCheck.style.display = 'block';
                    formCheckContainer.parentNode.insertBefore(newCheck, formCheckContainer.nextSibling);

                }
            }
        } else if ((addButton) && (a !== 0)) {
            window.alert('Button clicked again');
            a=0
            const itemQty = itemQtyInput.value;
            if (itemQty) {
                window.alert('a =' + a)
                for (let i = 0; i < itemQty; i++) {
                    const newCheck = formCheckContainer.cloneNode(true);
                    newCheck.style.display = 'block';
                    formCheckContainer.parentNode.insertBefore(newCheck, formCheckContainer.nextSibling);

                }
            }
        }

    });
});
