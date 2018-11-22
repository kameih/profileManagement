/*
* custom script for admin Dashboard
*/
ajaxfunctiondash=function(id, baseUrl, funcVar)
    {   
        switch(funcVar)
        {
            case "delete":
             
                    if(confirm("Are you sure you want to delete this?")){
                    $.ajax({

                        url:baseUrl+'Dashboard.php?f=deleteUser',
                        type:'POST',
                        data:{id:id},
                        success:function(data)
                        {
                             location.reload();
                        }
                    });
                }
                else{
                    return false;
                }

            break;

            case "active":
                    if(confirm("Are you sure you want to Activate this User?")){
                    $.ajax({

                        url:baseUrl+'Dashboard.php?f=activeuser',
                        type:'POST',
                        data:{id:id},
                        success:function(data)
                        {
                             console.log(data);//location.reload();
                             location.reload();
                        }
                    });
                    }
                    else{
                        return false;
                    }
            break;

            case "inactive":
                     if(confirm("Are you sure you want to Deactivate this User?")){
                    $.ajax({

                        url:baseUrl+'Dashboard.php?f=inactiveuser',
                        type:'POST',
                        data:{id:id},
                        success:function(data)
                        {
                             
                             console.log(data);//location.reload();
                             location.reload();
                        }
                    });
                    }
                    else{
                        return false;
                    }
            break;

        }
       
    }
