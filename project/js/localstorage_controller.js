function putIntoLocalStorage(storage, itemName, itemValue)
{
    storage.setItem(itemName, itemValue);
}

function loadData(id)
{
    var data = storage.getItem(id);

    return data;
}

function autoLoadTrueFalse(items)
{
    var elem;

    for (var i = 0; i < items.length; i++)
    {
        elem = document.getElementById("?"+loadData(items[i])[0]+items[i])

        elem.checked = true;
    }
}


function autoLoadOneChoice(ids, items)
{
    var elem;
    var data;

    for (var j = 0; j < items.length; j++)
    {
        data = loadData(items[j]);

        for (var i = 0; i < ids.length; i++)
        {
            elem = document.getElementById(ids[i]);

            if (ids[i] == data)
            {
                elem.checked = true;
            }
        }
    }
}

function autoLoadMultiChoice(ids, itemids)
{
    var elem;
    var data;

    for (var i = 0; i < ids.length; i++)
    {
        data = loadData(ids[i]);

        elem = document.getElementById(itemids[i]);

        if (data == 'true')
        {
            elem.checked = true;
        }
    }
}