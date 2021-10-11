for (var i in oldarr) {
                                     if (oldarr[i].id == posts.data.id_product) {
                                        oldarr[i].jumlahItem = (parseInt(oldarr[i].jumlahItem)+1);
                                        oldarr[i].totalHarga = ((parseInt(oldarr[i].jumlahItem))*oldarr[i].totalHargaPerItem);
                                        break; //Stop this loop, we found it!
                                     }
                                }
