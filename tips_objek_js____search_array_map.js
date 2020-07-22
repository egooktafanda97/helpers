let bio = [
  {
    nama: "ego oktafanda",
    alamat: "sungailangsat",
    tgl_lahir: "30-10-1997"
  },
  {
    nama: "egi oktafanda",
    alamat: "sungailangsat",
    tgl_lahir: "10-02-2002"
  }
];
//foreach dalam javascript
// bio.forEach(bio => {
//   console.log(bio.nama);
// });

const data_lengkap = {
  b: "",
  bio: function(bio) {
    return (this.b = bio);
  },
  data: function(search) {
    const index = this.b.findIndex(function(tdo, index) {
      return tdo.nama.toLowerCase() === search.toLowerCase();
    });
    return this.b[index];
  }
};
data_lengkap.bio(bio);
console.log(data_lengkap.data("egi oktafanda"));
