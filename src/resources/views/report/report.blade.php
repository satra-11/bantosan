<x-app-layout>
<x-slot name="body_id">
  index
</x-slot>


<section class="modSecBlock">
  <div class="myBlockCooperation">
    <h2 class="modHeading2 sticky-top">報告書</h2>
    <div class="container">
      <div class="mb-50">
        <a class="font-semibold" href="/talk">＜＜トークに戻る</a>
      </div>
      <div class="tab-content__header">
        <div class="mb-50 flex flex-row items-center">
          <div class="text-[#469D6C]" style="width:250px">
            <a href="#" class="btn p-15 bg-gray mr-20 border-1 border-gray">報告書を新規作成＋</a>
          </div>
          <form id="searchForm">
            <label class="modSearch--label">
              <input class="form-control modSearch--input" name="query" type="search" placeholder="報告書を検索">
            </label>
          </form>
        </div>  
      </div>
<!--テーブル-->
        <table class="table table-striped table-vertical-border font-semibold text-center custom-cell-p" >
          <thead class="bg-custom-green font-semibold">
          <tr class="font-semibold text-white text-center">
            <th scope="col">現場名</th>
            <th scope="col">報告書名</th>
            <th scope="col">最終更新者</th>
            <th scope="col">最終更新日</th>
            <th scope="col">編集</th>
            <th scope="col">コピー</th>
            <th scope="col">削除</th>
          </tr>
          </thead>
          <tbody class="tab-content__body" id="searchResults">
          @foreach ($items as $item)
            <tr>
              <td>{{$item->place}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->user}}</td>
              <td>{{$item->updated_at}}</td>
              <td><a class="cursor-pointer"><img src="{{ asset('/assets/img/common/icon_report.svg') }}" alt="edit" class="icon" loading="lazy"></a></td>
              <td >
                <form action="{{ route('report.duplicate') }}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{ $item->id }}">
                  <button type="submit">
                    <img src="{{ asset('/assets/img/common/copy.png') }}" alt="copy" class="icon" loading="lazy">
                  </button>
                </form>
              </td>
              <td >
                <form class="w-10 h-10" action="{{ route('report.remove') }}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{ $item->id }}">
                    <button type="submit">
                      <img src="{{ asset('/assets/img/common/icon_delete_md.svg') }}" alt="delete" class="icon" loading="lazy">
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
<!--テーブルend-->
      </div>
    </div>
  </div>
</section>
</x-app-layout>
<style>
.mb-50{
  margin-bottom:50px;
}

img.icon{
  width:20px;
  height:20px;
}

.table-vertical-border > thead > tr > th{
  border-right: 1px solid white;
  border-bottom: 0; 
}
.table-vertical-border > thead > tr > th:last-child{
  border-right: 0;
}
.bg-custom-green{
  background-color: #469D6C;
}

/*override*/
.font-semibold th {
  font-weight: 600;
}

.text-center th {
  text-align: center;
}

.bg-gray {
  background-color:#F1F3F3;
}

.mr-20 {
  margin-right:20px;
}
.border-1{
  border-width:1px;
}
.border-gray{
  border-color:gray;
}

.p-15{
  padding:15px;
}

table.custom-cell-p td, table.custom-cell-p th{
  padding: 0.25rem;
}
.items-center{
  align-items: center;
}
</style>
