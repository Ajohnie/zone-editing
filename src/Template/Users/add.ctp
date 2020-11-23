<div class="container">
    <?= $this->Form->create($user, ['class' => '', 'id' => 'userForm']) ?>
    <fieldset>
        <div class="row">
            <div class="form-group">
                <label for="staff_id">Name</label>
                <?= $this->Form->control('staff_id', ['class' => 'form-control', 'style' => 'color:black', 'options' => $staffs, 'onchange' => 'getEmail()', 'empty' => 'select staff member', 'label' => '', 'required' => true]); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="col-8">
                <div class="form-group">
                    <label for="email">Email</label>
                    <?= $this->Form->control('email', ['class' => 'form-control disabled', 'type' => 'email', 'disabled' => true, 'style' => 'color:black', 'placeholder' => '(e.g you@jspropertyagency.com)', 'label' => '', 'required' => true]); ?>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="password">Password</label>
                    <?= $this->Form->control('password', ['class' => 'form-control', 'style' => 'color:black', 'placeholder' => 'Enter password', 'type' => 'password', 'label' => '', 'required' => true]); ?>
                </div>
            </div>

        </div>
        <div class="row">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn  btn-raised btn-submit', 'style' => 'background-color: #1f1f6e;display: block;padding: 12px;width: 100%;color: #fff;border:0;margin-top: 40px;']) ?>
        </div>
    </fieldset>

    <?= $this->Form->end() ?>
</div>
<script>
    //fetch staff email while adding user
    function getEmail() {
        var id = $('#staff-id').val();
        if (id === null || id === '') {
            $('#email').val(null);
            return null;
        }
        $.ajax({

            beforeSend: function (xhr) {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            type: "get",
            url: "<?= $this->Url->build(['controller' => 'Users', 'action' => 'getEmail']) ?>",
            data: {id: id}
        }).done(function (response) {
            $('#email').val(response);
        }).fail(function (response, status, xhr) {
            if (response._redirect) {
                window.location.href = response._redirect['url'];
            } else if (response.status === 403) {
                window.location.href = '/';//jsproperty
            } else if (response.status === 301) {
                window.location.href = response.statusText;
            } else if (response.status === 500) {
                alert('Server Error! Try again Later');
            } else if (response.status === 404) {
                alert('Operation Failed !');
            }
        });
    }
    function save() {
        var form = $('form #userForm');
        $.ajax({

            beforeSend: function (xhr) {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            type: "post",
            url: "<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>",
            data: form.serialize()
        }).done(function (response, status, xhr) {
            window.location.href = response;
        }).fail(function (response) {
            if (response._redirect) {
                window.location.href = response._redirect['url'];
            } else if (response.status === 403) {
                window.location.href = '/';//jsproperty
            } else if (response.status === 301) {
                window.location.href = response.statusText;
            } else if (response.status === 500) {
                alert('Server Error! Try again Later');
            } else if (response.status === 404) {
                alert('Operation Failed !: ' + response);
            }
        });
    }


</script>