<div>
    <form wire:submit.prevent="sendmessage" class="form-a">
        <div class="row">
          <div class="col-md-12 mb-1">
            <div class="form-group">
              <input wire:model="name" type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
            </div>
          </div>
          <div class="col-md-12 mb-1">
            <div class="form-group">
              <input wire:model="email" type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
            </div>
          </div>
          <div class="col-md-12 mb-1">
            <div class="form-group">
              <textarea wire:model="message" id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
            </div>
          </div>
          <div class="col-md-12 mt-3">
            <button type="submit" class="btn btn-a">Send Message</button>
          </div>
        </div>
      </form>
</div>
