class Produit < ActiveRecord::Base
	mount_uploader :photo, PictureUploader

end
