<!-- Modal -->
    @foreach($newsdetail as $newsdetails)
      <div class="modal fade modal-details" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg modal-hover">
              <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-titles">{{$newsdetails->title}}</h4>
                  </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-6">
                          <img class="detail-news" src="storage/{{$newsdetails->image}}">
                      </div>
                      <div class="col-lg-6 col-md-6 col-xs-6 detail-news">
                          {{$newsdetails->brief}} 
                      </div>   
                  </div>
              </div>
              <div class="modal-footer news-inverse">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
              </div>
              </div>
          </div>
      </div>
                         
    @endforeach
