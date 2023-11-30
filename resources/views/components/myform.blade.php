<div>
    <div class="container mx-auto mt-4 px-4">
     
        <h1 class="mb-4">Fetch HMRC Exchange Rate</h1>
        <form method="POST" action="/getxr" > 
          @csrf
         
          <div class="container mx-auto mt-4 px-4">
            <label for="month">Month</label>
            <select name="month" id="month">
              <option value="">--</option>
              <option value="01">Jan</option>
              <option value="02">Feb</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">Aug</option>
              <option value="09">Sept</option>
              <option value="10">Oct</option>
              <option value="11">Nov</option>
              <option value="12">Dec</option>
            </select>
            @error('month')
            <span class="text-red-500">
              Month must be in numeric range 01>12    </span>
            @enderror
        </div>
        <div>
          <label for="year">Year</label>
          <select name="year" id="year">
            <option value="">----</option>
            <option value="22">2022</option>
            <option value="23">2023</option>
            <option value="24">2024</option>
          </select>
          @error('year')
          <span class="text-red-500"> 
            Year must be  numeric in range 22>24</span>
          @enderror
      </div>
     <div class="mt-6">
             
                <button class="button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
             </div>
          </form>
         </div>
</div>