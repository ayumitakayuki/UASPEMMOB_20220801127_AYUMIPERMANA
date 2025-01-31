import 'package:flutter/material.dart';
import 'package:intl/intl.dart'; // Tambahkan package intl untuk formatting
import 'package:uaspemmob/models/product.dart';

class ProductCard extends StatelessWidget {
  final Product product;
  final VoidCallback onDelete;

  ProductCard({required this.product, required this.onDelete});

  // Fungsi untuk memformat angka menjadi Rupiah
  String formatRupiah(double amount) {
    final formatter = NumberFormat.currency(locale: 'id_ID', symbol: 'Rp', decimalDigits: 0);
    return formatter.format(amount);
  }

  @override
  Widget build(BuildContext context) {
    return Card(
      child: ListTile(
        title: Text(product.name),
        subtitle: Text('Harga: ${formatRupiah(product.price)}'), // Gunakan formatRupiah di sini
        trailing: IconButton(
          icon: Icon(Icons.delete, color: Colors.red),
          onPressed: onDelete,
        ),
      ),
    );
  }
}