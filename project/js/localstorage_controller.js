function putIntoLocalStorage(storage, itemName, itemValue)
{
    storage.setItem(itemName, itemValue);
}

function loadData(id)
{
    var data = storage.getItem(id);

    return data;
}
