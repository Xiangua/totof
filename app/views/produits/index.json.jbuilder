json.array!(@produits) do |produit|
  json.extract! produit, :id, :nom, :photo, :description
  json.url produit_url(produit, format: :json)
end
