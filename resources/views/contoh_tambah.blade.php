    <form action="{{url('t')}}" method="post">
      {{csrf_field()}}
        <label>ID Kecamatan</label>
        <input type="text" name="id_kecamatan">
        <br/>
        <label>Nama Kecamatan</label>
        <input type="text" name="kecamatan">
        <br/>  
        <button type="submit" name="button">Tambah</button>
    </form>
