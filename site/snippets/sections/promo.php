<table class="row <?= $data->bgColor() ?>">
    <tr>
      <td class="wrapper last">

        <table class="twelve columns">
          <tr>
            <td class="text-pad center">
            <h1><?= $data->header() ?></h1>
            <?= $data->description()->kt() ?>
            </td>
            <td class="expander"></td>
          </tr>
        </table>

      </td>
      
    </tr>
  </table>
  <table class="row <?= $data->bgColor() ?>">
    <tr>
      <td class="wrapper offset-by-three last">

        <table class="six columns">
          <tr>
            <td class="text-pad center">
              <table class="medium-button" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td >
                    <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center"><a target="_blank" href="<?= $data->url() ?>" target="_blank" style=""><?= $data->btnText() ?></a></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
            <td class="expander"></td>
          </tr>
        </table>

      </td>
      
    </tr>
  </table>
  <table class="row <?= $data->bgColor() ?>">
    <tr>
      <td class="wrapper last">

        <table class="twelve columns">
          <tr>
            <td class="center">
              <img src="<?= $data->emailImage() ?>">
            </td>
            <td class="expander"></td>
          </tr>
        </table>

      </td>
      
    </tr>
  </table>